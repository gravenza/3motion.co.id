(function () {
  var sticky = null;

  window.vcv.on('ready', function (action, id) {
    if (action !== 'merge') {
      var selector = '[data-vce-sticky-element]';
      // selector = id ? '[data-vcv-element="' + id + '"]' + selector : selector;

      var stickyElement = document.querySelector(selector);
      if (stickyElement) {
        if (sticky) {
          sticky.destroy();
        }

        var settings = {
          wrap: true,
          stickyClass: 'vce-row-sticky'
        };

        // Delay for editor (text block element causes issue with sticky only in editor)
        var delay = action ? 500 : 10;

        setTimeout(function() {
          sticky = new Sticky(selector, settings);
        }, delay);
      }
    }
  });
})();

