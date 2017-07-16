$(function () {
  var inputData = {};

  var $form = $('#calculator');

  changeCheckboxBehavior();

  $form.on('submit', function (e) {
    e.preventDefault();
  });

  $('#refresh, #submit, .close').on('click', function () {
    $.ajax({
      url: 'calc.php',
      type: 'post',
      dataType: 'application/json',
      data: $form.serialize(),
      success: function (data) {
        resetForm();
      },
      error: function () {
        resetForm();
      }
    });
  });

  $form.find('input').on('change', function (event) {
    var sums;

    inputData[event.currentTarget.name] = event.currentTarget.value;
    sums = calcSums(inputData);

    for (var key in sums) {
      if (sums.hasOwnProperty(key)) {
        $('#' + key).html(Number(sums[key] || 0).toFixed());
      }
    }
  });


  function resetForm () {
    $form[0].reset();
    $form.find('input').trigger('change');
  }

  function changeCheckboxBehavior () {
    $("input:checkbox").on('click', function () {
      var $box = $(this);
      var group = "input:checkbox[name='" + $box.attr("name") + "']";
      $(group).prop("checked", false);
      $box.prop("checked", true);
    });
  }
});