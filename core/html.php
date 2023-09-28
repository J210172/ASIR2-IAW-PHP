<?php

class HtmlController {
	private array $top_js_list;
	private array $bottom_js_list;
	private array $css_list;
	private array $font_list;
	private string $title = '';
	private string $header_view;
	private string $content_view;
	private string $footer_view;
	private string $data;

	private function __construct($view) {
		$this->view = $view;
	}

	public static function new(string $view = "core/view/404.php"): self {
		return new static($view);
	}

	function setTittle(string $title): self {
		$this->title = $title;
		return $this;
	}

	function addTopJS(string|array $js): self {
		array_push($top_js_list, $js);
		return $this;
	}

	function addBottomJS(string|array $js): self {
		array_push($bottom_js_list, $js);
		return $this;
	}
	
	function addCss(string|array $css): self {
		array_push($css_list, $css);
		return $this;
	}

	function addFont(string|array $font): self {
		array_push($font_list, $font);
		return $this;
	}

	function setData($data): self {
		$this->data = $data;
		return $this;
	}
	
	function render() {
		include "core/view/base.php";
	}
}