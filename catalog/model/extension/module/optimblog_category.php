<?php
/**
 * @package    OptimBlog
 * @version    3.1.0.1
 * @author     Dmitriy Khokhlov <admin@optimlab.com>
 * @copyright  Copyright (c) 2018, Dmitriy Khokhlov. (https://optimlab.com/)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://optimcart.com
 */
class ModelExtensionModuleOptimBlogCategory extends Model {
	public function getCategoryImages($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_image WHERE category_id = '" . (int)$category_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getCategoryPath($category_id) {
		$query = $this->db->query("SELECT GROUP_CONCAT( path_id ORDER BY level SEPARATOR '_' ) AS path FROM " . DB_PREFIX . "category_path WHERE category_id = '" . (int)$category_id . "'");

		return $query->row['path'];
	}
}