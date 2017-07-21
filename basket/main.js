$(function () {
  var products,
    finalSum,
    dictionary,
    $productsList = $('#productsList'),
    order,
    $closeBtn = $('#basketModal').find('.close'),
    $orderForm = $('#orderForm');

  dictionary = {
    tabletop: 'столешница',
    steps: 'ступени',
    windowsill: 'подоконник',
    frontFacade: 'фасад прямой',
    furnitureBoard: 'мебельный щит',
    ash: 'ясень',
    oak: 'дуб'
  };

  $('#basket').on('basket:update', updateData);

  updateData();

  $('#makeOrder').on('click', function (e) {
    validateForm();
  });

  function updateData () {
    getDataFromLS();
    products && products.length? renderProducts(): renderEmptyMsg();
  }

  function renderProducts () {
    $productsList.empty();
    $productsList.off('click', '.glyphicon-remove');
    $orderForm.show();
    $('#makeOrder').show();

    products.forEach(function (product, key) {
      $('#productsList').append('<li>' +
        '<span class="itemName">' + dictionary[product.itemName] + '</span>' +
        '<span class="woodBreed">' + dictionary[product.woodBreed] + '</span>' +
        '<span class="options">' + product.length + 'x' + product.width + '</span>' +
        '<span class="productNumber">' + product.detailsNumber + '</span>' +
        '<span class="totalWithDiscount">' + product.totalWithDiscount + '</span>' +
        '<span class="glyphicon glyphicon-remove" data-key="' + key + '"></span>' +
        '</li>');
    });

    $('#productsList').append('<li><span>Итого: </span><span class="finalSum">'+ finalSum + ' грн</span></li>');

    $productsList.on('click', '.glyphicon-remove', function (e) {
      localStorage.setItem('finalSum', JSON.stringify(finalSum - products[e.target.dataset.key].totalWithDiscount));
      products.splice(e.target.dataset.key, 1);
      localStorage.setItem('products', JSON.stringify(products));
      finalSum = localStorage.getItem('finalSum');
      updateData();
    })
  }

  function getDataFromLS () {
    products = JSON.parse(localStorage.getItem('products'));
    finalSum = localStorage.getItem('finalSum');
  }

  function renderEmptyMsg () {
    $('#productsList').html('Корзина пуста');
    $orderForm.hide();
    $('#makeOrder').hide();
  }

  function resetForm () {
    $orderForm[0].reset();
    $orderForm.hide();
  }

  function getDataFromForm () {
    var data = {};
    $orderForm.serializeArray().map(function (item) {
      return data[item.name] = item.value;
    });

    return data;
  }

  function renderSuccessMsg () {
    $productsList.html('Спасибо за заказ. Мы с Вами свяжемся в ближайшее время.');
    $('#makeOrder').hide();
    $closeBtn.on('click', function () {
      renderEmptyMsg();
      $closeBtn.off('click');
    })
  }

  function validateForm () {
    $("#orderForm").on('submit', function (e) {
      e.preventDefault();
    })
      .validate({
        rules: {
          name: 'required',
          phone: {
            required: true,
            regex: /^\+3[(]0\d{2}[)]\d{7}$/
          }
        },
        messages: {
          name: {required: 'Укажите имя'},
          phone: {
            required: 'Укажите телефон для подтверждения',
            regex: 'Проверьте правильность указанного номера'
          }
        },
        submitHandler: function () {
          getDataFromLS();
          order = {
            products: products,
            finalSum: finalSum,
            client: getDataFromForm()
          };

          $.ajax({
            url: '/index.php?page=getDataCalc',
            type: 'post',
            dataType: 'json',
            data: JSON.stringify(order),
            success: function (data) {
              resetForm();
              localStorage.removeItem('products');
              localStorage.removeItem('finalSum');
              renderSuccessMsg();
            },
            error: function (e) {
              resetForm();
              localStorage.removeItem('products');
              localStorage.removeItem('finalSum');
              renderSuccessMsg();
            }
          });
        }
      });
  }

  $.validator.addMethod('regex', function(value, element, regexpr) {
    return regexpr.test(value);
  });
});