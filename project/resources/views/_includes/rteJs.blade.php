
<script>
var quill = new Quill('#{{ $rteId }}', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline']
    ]
  },
  placeholder: 'Enter your secret here ...',
  theme: 'snow'
});
</script>