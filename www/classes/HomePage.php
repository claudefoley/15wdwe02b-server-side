<?php

// Class speicifically for the home page
// based off of the Page class.
class HomePage extends Page {

	// Method to show the content for the home page.
	public function contentHTML() {

		// Show image slider.
		include 'imageslider.php';

		// Show the greeting.
		include 'greeting.php';

		// Sign up for news
	}
}