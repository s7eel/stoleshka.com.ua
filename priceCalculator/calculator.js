//RATIOS need to be updated from the server side
//
// const RATIOS = {
//   chamferRemovingPrice: 4,
//   complexRadiusPrice: 150,
//   coveringPreparationPrice: 150,
//   glueType: {
//     waterproof: 1.2,
//     notWaterproof: 1
//   },
//   coveringPrice: {
//     polish: 300,
//     polishWithColor: 400,
//     noCovering: 0
//   },
//   packagingPrice: 35,
//   woodBreedPrice: {
//     ash: 2200,
//     oak: 3300
//   },
//   bondingType: {
//     glued: 1,
//     spliced: .8
//   },
//   gauge: {
//     20: .7,
//     30: .9,
//     40: 1
//   },
//   discount: .07
// };

function calcSums (inputData) {
  inputData.size = inputData.width * inputData.length / 1000000;
  inputData.discount = Number(inputData.chamferRemoving) && (inputData.covering === 'polish' || inputData.covering === 'polishWithColor');

  var sums = {
    productionCost: parseFloat(calcProductionCost(inputData).toFixed()),
    chamferRemovingCost: parseFloat(calcChamferRemovingCost(inputData).toFixed()),
    complexRadiusCost: parseFloat(calcComplexRadiusCost(inputData).toFixed()),
    coveringPreparationCost: parseFloat(calcCoveringPreparationCost(inputData).toFixed()),
    coveringCost: parseFloat(calcCoveringCost(inputData).toFixed()),
    packagingCost: parseFloat(calcPackagingCost(inputData).toFixed())
  };

  sums.total = sums.productionCost + sums.chamferRemovingCost + sums.complexRadiusCost + sums.coveringPreparationCost + sums.coveringCost + sums.packagingCost;
  sums.discount = inputData.discount? parseFloat((sums.total * RATIOS.discount).toFixed()): 0;
  sums.totalWithDiscount = sums.total - sums.discount;
  sums.finalSum = (sums.totalWithDiscount || 0)+ JSON.parse(localStorage.getItem('finalSum'));

  return sums;
}

function calcProductionCost (inputData) {
  return RATIOS.woodBreedPrice[inputData.woodBreed] * inputData.size * RATIOS.glueType[inputData.glueType] * RATIOS.gauge[inputData.gauge] * RATIOS.bondingType[inputData.bondingType] * inputData.detailsNumber;
}

function calcChamferRemovingCost (inputData) {
  return parseInt(inputData.chamferRemoving)? 2 * (Number(inputData.width) + Number(inputData.length)) * RATIOS.chamferRemovingPrice / 1000 * inputData.detailsNumber: 0;
}

function calcComplexRadiusCost (inputData) {
  return parseInt(inputData.complexRadius)? RATIOS.complexRadiusPrice * inputData.detailsNumber: 0;
}

function calcCoveringPreparationCost (inputData) {
  return parseInt(inputData.coveringPreparation)? RATIOS.coveringPreparationPrice * 2 * inputData.size * inputData.detailsNumber : 0;
}

function calcCoveringCost (inputData) {
  return inputData.covering? 2 * RATIOS.coveringPrice[inputData.covering] * inputData.size * inputData.detailsNumber: 0;
}

function calcPackagingCost (inputData) {
  return (parseInt(inputData.packaging) || 0) && RATIOS.packagingPrice * inputData.size * inputData.detailsNumber;
}