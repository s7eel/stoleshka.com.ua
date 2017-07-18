$(function () {
  var inputData = {itemName: 'tabletop'},
    $form = $('#calculator'),
    $requirementBtn = $('#showAdditionalRequirements'),
    $covering = $('.covering'),
    $toningColor = $('.toningColor');

  changeCheckboxBehavior();

  $form.on('submit', function (e) {
    e.preventDefault();
  });

  $requirementBtn.on('click', function () {
    Number($('#totalWithDiscount').html()) && showAdditionalBlock();
  });

  $('#calcModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var itemName = button.data('itemName');

    itemName && $('#itemName').val(itemName);
  });

  $('#refresh, #submit, .close').on('click', function () {
    var data = {};
    $form.serializeArray().map(function (item) {
      return data[item.name] = item.value;
    });
    data.totalWithDiscount = $('#totalWithDiscount').html();

    $.ajax({
      url: '../index.php?page=errorPage',
      type: 'post',
      dataType: 'json',
      data: JSON.stringify(data),
      success: function (data) {
        resetForm();
      },
      error: function (e) {
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
    checkSubmitBtn(sums.productionCost);
    checkRelatedItems();
  });

  function showAdditionalBlock () {
    $requirementBtn.hide();
    $('#additionalRequirements').show();
  }

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

  function checkSubmitBtn (productionCost) {
    $('#submit').prop("disabled", !Boolean(productionCost));
  }

  function checkRelatedItems () {
    var noCoveringPreparation = !Number(inputData.coveringPreparation),
      noPolishWithColor = Boolean(inputData.covering !== 'polishWithColor');

    $covering.prop('disabled', noCoveringPreparation);
    $covering.toggleClass('grey', noCoveringPreparation);
    $toningColor.prop('disabled', noPolishWithColor);
    $toningColor.toggleClass('grey', noPolishWithColor);

    if (noCoveringPreparation) {
      $('[name="covering"]').prop('checked', false);
      delete inputData.covering;
    }
    if (noPolishWithColor) {
      $('[name="toningColor"]').prop('checked', false);
      delete inputData.toningColor;
    }
  }
});