
var quill = new Quill('#rich-text-editor', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline']
    ]
  },
  // modules: { toolbar: { container: '#toolbar' } },
  placeholder: 'Enter your secret here ...',
  theme: 'snow'
});
