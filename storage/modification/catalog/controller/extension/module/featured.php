<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {

// Featured+
		$lang = $this->config->get('config_language_id');
		$title = isset($setting['titles']['title'.$lang]) && $setting['titles']['title'.$lang] ? $setting['titles']['title'.$lang] : '';

		if (isset($title) && $title) {
			$data['heading_title'] = $title;
		}

		if (isset($setting['shuffle']) && $setting['shuffle']) {
			shuffle($setting['product']);
		}
// Featured+
			
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						$tax_price = (float)$product_info['special'];
					} else {
						$special = false;
						$tax_price = (float)$product_info['price'];
					}
		
					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format($tax_price, $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}

					// Nice Theme . Begin
					$data['nice']['productlist_image_margins'] = $this->config->get('theme_nice_productlist_image_margins');
					$data['nice']['productlist_description'] = $this->config->get('theme_nice_productlist_description');
					$data['nice']['productlist_description_on_mobile'] = $this->config->get('theme_nice_productlist_description_on_mobile');
					$data['nice']['productlist_name_font_weight'] = $this->config->get('theme_nice_productlist_name_font_weight');
					$data['nice']['productlist_price_font_weight'] = $this->config->get('theme_nice_productlist_price_font_weight');
					$data['nice']['productlist_grid_hover_effect'] = $this->config->get('theme_nice_productlist_grid_hover_effect');
					$data['nice']['productlist_cols_on_mobile'] = $this->config->get('theme_nice_productlist_cols_on_mobile');
					// Nice Theme . End

					$data['products'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => $image,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}