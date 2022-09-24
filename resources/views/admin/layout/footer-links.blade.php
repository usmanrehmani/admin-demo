<script src="{{asset('js/bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/gd-default.js')}}"></script>



<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


<script>
	$(document).ready(function() {
		//Only needed for the filename of export files.
		//Normally set in the title tag of your page.
		document.title = 'Simple DataTable';
		// DataTable initialisation
		$('#example').DataTable({
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
				'colvis',
				'copyHtml5',
				'csvHtml5',
				'excelHtml5',
				'pdfHtml5',
				'print'
			]
		});
	});
</script>