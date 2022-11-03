"use strict";


$("#modal-1").fireModal({
  title: 'Isi Data',
  body: $("#modal-input1-part"),
  center: true,
  onFormSubmit: function(modal, e, form) {
    // Form Data
    let form_data = $(e.target).serialize();
    console.log(form_data)

    // DO AJAX HERE
    let fake_ajax = setTimeout(function() {
      form.stopProgress();
      modal.find('.modal-body').prepend('<div class="alert alert-info">Data Telah Disimpan</div>')

      clearInterval(fake_ajax);
    }, 1500);

    e.preventDefault();
  },
  shown: function(modal, form) {
    console.log(form)
  },
  buttons: [
    {
      text: 'Submit',
      submit: true,
      class: 'btn btn-info btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#modal-2").fireModal({
  title: 'Isi Data',
  body: $("#modalhaha"),
  center: true,
  onFormSubmit: function(modal, e, form) {
    // Form Data
    let form_data = $(e.target).serialize();
    console.log(form_data)

    // DO AJAX HERE
    let fake_ajax = setTimeout(function() {
      form.stopProgress();
      modal.find('.modal-body').prepend('<div class="alert alert-info">Data Telah Disimpan</div>')

      clearInterval(fake_ajax);
    }, 1000);


    e.preventDefault();
  },
  shown: function(modal, form) {
    console.log(form)
  },
  buttons: [
    {
      text: 'Submit',
      submit: true,
      class: 'btn btn-info btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});
