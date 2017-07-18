//RATIOS need to be updated from the server side

const RATIOS = {
  chamferRemovingPrice: 150,
  complexRadiusPrice: 150,
  coveringPreparationPrice: 150,
  glueType: {
    waterproof: 1.2,
    notWaterproof: 1
  },
  coveringPrice: {
    polish: 300,
    polishWithColor: 400,
    noCovering: 0
  },
  packagingPrice: 25.2,
  woodBreedPrice: {
    ash: 2200,
    oak: 2500
  },
  bondingType: {
    glued: 1,
    spliced: .8
  },
  gauge: {
    20: .7,
    30: .9,
    40: 1
  },
  discount: .07
};

function calcSums (inputData) {
  inputData.size = inputData.width * inputData.length / 1000000;

  var sums = {
    productionCost: calcProductionCost(inputData),
    chamferRemovingCost: calcChamferRemovingCost(inputData),
    complexRadiusCost: calcComplexRadiusCost(inputData),
    coveringPreparationCost: calcCoveringPreparationCost(inputData),
    coveringCost: calcCoveringCost(inputData),
    packagingCost: calcPackagingCost(inputData)
  };

  sums.total = sums.productionCost + sums.chamferRemovingCost + sums.complexRadiusCost + sums.coveringPreparationCost + sums.coveringCost + sums.packagingCost;
  sums.discount = inputData.discount ? sums.total * RATIOS.discount : 0;
  sums.totalWithDiscount = sums.total + sums.discount;

  return sums;
}

function calcProductionCost (inputData) {
  return RATIOS.woodBreedPrice[inputData.woodBreed] * inputData.size * RATIOS.glueType[inputData.glueType] * RATIOS.gauge[inputData.gauge] * RATIOS.bondingType[inputData.bondingType] * inputData.detailsNumber;
}

function calcChamferRemovingCost (inputData) {
  return parseInt(inputData.chamferRemoving) ? 2 * inputData.size * RATIOS.chamferRemovingPrice * inputData.detailsNumber : 0;
}

function calcComplexRadiusCost (inputData) {
  return parseInt(inputData.complexRadius) ? RATIOS.complexRadiusPrice * inputData.detailsNumber : 0;
}

function calcCoveringPreparationCost (inputData) {
  return parseInt(inputData.coveringPreparation) ? RATIOS.chamferRemovingPrice * inputData.size * inputData.detailsNumber : 0;
}

function calcCoveringCost (inputData) {
  return inputData.covering ? RATIOS.coveringPrice[inputData.covering] * inputData.size * inputData.detailsNumber : 0;
}

function calcPackagingCost (inputData) {
  return (parseInt(inputData.packaging)||0) && RATIOS.packagingPrice;
}