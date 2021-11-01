require('./voyager_tinymce');
import '@simonwep/pickr/dist/themes/nano.min.css'; // 'nano' theme
import Pickr from '@simonwep/pickr';

//Shift select multiple checkboxes in BROWSE
$(document).ready(function () {
	var $chkboxes = $('#dataTable td input[type="checkbox"]');
	var lastChecked = null;

	$chkboxes.click(function (e) {
		if (!lastChecked) {
			lastChecked = this;
			return;
		}

		if (e.shiftKey) {
			var start = $chkboxes.index(this);
			var end = $chkboxes.index(lastChecked);

			$chkboxes.slice(Math.min(start, end), Math.max(start, end) + 1).prop('checked', lastChecked.checked);

		}

		lastChecked = this;
	});
});
const inputElement = document.querySelector('.color-picker');

const pickr = Pickr.create({
	el: inputElement,
	theme: 'nano', // or 'monolith', or 'nano'
	// useAsButton: true,
	swatches: [
		"#3781EF",
		"#00C853",
		"#FFD600",
		"#FF1744",
		"#FF6D00",
		"#00B8D4",
		"#B6B6B6",
	],

	components: {

		// Main components
		preview: true,
		opacity: false,
		hue: true,

		// Input / output Options
		interaction: {
			hex: true,
			rgba: false,
			hsla: false,
			hsva: false,
			cmyk: false,
			input: true,
			clear: true,
			save: true
		}
	}
}).on('init', pickr => {
	var inputField = $('input[name=' + $(inputElement).attr('name') + ']')[0];
	pickr.setColor(inputField.value);
}).on('save', color => {
	var inputField = $('input[name=' + $(inputElement).attr('name') + ']')[0];
	inputField.value = pickr.getSelectedColor().toHEXA().toString(0).replace("#", "");
});