const filter_speakers = (form_data) => {
	const data = {
		positions: form_data.get('positions'),
		countries: form_data.get('countries')
	}

	$.ajax({
		type: 'POST',
		url: `${window.location.origin}/wp-admin/admin-ajax.php`,
		data: {
			action: 'filter_speakers',
			positions: data.positions,
			countries: data.countries
		},
		success: (result) => {
			$('.speakers .cards').html(result);
		}
	})
}

document.addEventListener('DOMContentLoaded', () => {

	(() => {
		const filters = document.querySelector('[data-form="filters"]');
		filters?.addEventListener('change', e => {
			const form_data = new FormData(filters);
			filter_speakers(form_data);
		});
	})();

}, true);