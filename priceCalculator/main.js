$(function () {
  var inputData = {itemName: 'tabletop'},
    $form = $('#calculator'),
    $requirementBtn = $('#showAdditionalRequirements'),
    $covering = $('.covering'),
    $toningColor = $('.toningColor');

  setFinalSum();
  changeCheckboxBehavior();

  $form.on('submit', function (e) {
    e.preventDefault();
  });

  $requirementBtn.on('click', function () {
    Number($('#totalWithDiscount').html()) && toggleAdditionalBlock();
  });

  $('#calcModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var itemName = button.data('itemName');

    itemName && $('#itemName').val(itemName);
  });

  $('#submit').on('click', function () {
    sendFormData('/index.php?page=getDataCalc');
    $('#calcModal').modal('hide');
    $('#basketModal').modal('show');
  });
  $('#refresh, .close').on('click', function () {
    sendFormData('/index.php?page=getDataCalcEmpty');
  });

  $('#continue, #submit').on('click', function () {
    var products = JSON.parse(localStorage.getItem('products') || '[]'),
      finalSum = parseFloat(JSON.parse(localStorage.getItem('finalSum')) || 0) + parseFloat($('#totalWithDiscount').html());

    products.push(getDataFromForm());
    localStorage.setItem('products', JSON.stringify(products));
    localStorage.setItem('finalSum', JSON.stringify(finalSum));
    $('#basket').trigger('basket:update');

    resetForm();
  });

  $form.find('input[type="number"]').on('input', handleInput.bind(this));
  $form.find('input[type="checkbox"]').on('change', handleInput.bind(this));

  function sendFormData (url) {
    $.ajax({
      url: url,
      type: 'post',
      dataType: 'json',
      data: JSON.stringify(getDataFromForm()),
      success: function (data) {
        resetForm();
      },
      error: function (e) {
      }
    });
  }

  function handleInput (event) {
    var sums;

    inputData[event.currentTarget.name] = event.currentTarget.value;
    sums = calcSums(inputData);

    for (var key in sums) {
      if (sums.hasOwnProperty(key)) {
        $('#' + key).html(parseFloat(sums[key].toFixed()) || 0);
      }
    }
    checkSubmitBtn(sums.productionCost);
    checkRelatedItems();
  }

  function toggleAdditionalBlock () {
    $requirementBtn.toggle();
    $('#additionalRequirements').toggle();
  }

  function resetForm () {
    $form[0].reset();
    $requirementBtn.show();
    $('#additionalRequirements').hide();
    $form.find('input[type="checkbox"]').trigger('change');
    $form.find('input[type="number"]').trigger('input');
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
    $('#continue').prop("disabled", !Boolean(productionCost));
  }

  function checkRelatedItems () {
    var noCoveringPreparation = !Number(inputData.coveringPreparation),
      noPolishWithColor = inputData.covering !== 'polishWithColor';

    $covering.prop('disabled', noCoveringPreparation)
      .toggleClass('grey', noCoveringPreparation);
    $toningColor.prop('disabled', noPolishWithColor)
      .toggleClass('grey', noPolishWithColor);

    if (noCoveringPreparation) {
      $('[name="covering"]').prop('checked', false);
      delete inputData.covering;
    }
    if (noPolishWithColor) {
      $('[name="toningColor"]').prop('checked', false);
      delete inputData.toningColor;
    }
  }

  function getDataFromForm () {
    var data = {};
    $form.serializeArray().map(function (item) {
      return data[item.name] = item.value;
    });
    data.totalWithDiscount = $('#totalWithDiscount').html();
    return data;
  }

  function setFinalSum () {
    var finalSum = JSON.parse(localStorage.getItem('finalSum')) || 0;
    $('#finalSum').html(parseFloat(finalSum.toFixed()));
  }
});
