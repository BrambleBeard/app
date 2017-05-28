
<script>
    // rich text editor
    tinymce.init({
        selector: '#{{ $rteId }}',
        plugins: [],
        menu: [],
        plugins: "insertdatetime",
        toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | insertdatetime',
        branding: false
    });
</script>
