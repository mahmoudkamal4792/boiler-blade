<?php 

trait TraitBlade
{
	public function compileSvg($file)
    {
        $path = __DIR__ . '/src/images/shapes/' . trim($file, "' ()") . '.svg';

        // Create the dom document as per the other answers
        $svg = new \DOMDocument();
        $svg->load($path);
        $svg->documentElement->setAttribute("class", '');
        $output = $svg->saveXML($svg->documentElement);

        return $output;
    }
}

/*
    // File: AppServiceProvider.php
    // Function: boot()
    Blade::directive('svg', function ($file) {
        $path = resource_path() . '/images/shapes/' . trim($file, "' ()") . '.svg';

        // Create the dom document as per the other answers
        $svg = new \DOMDocument();
        $svg->load($path);
        $svg->documentElement->setAttribute("class", '');
        $output = $svg->saveXML($svg->documentElement);

        return $output;
    });
*/