const BASE_FEE = 26;
const WORDS_PER_PAGE = 250;
function getPages() {
    return parseInt(jQuery("#pages").val())
}
function getWordsCount() {
    return parseInt(getPages() * WORDS_PER_PAGE)
}
function getBasePrice() {
    return parseFloat(getPages() * BASE_FEE)
}
function getDiscount(e) {
    return parseFloat(e * 50 / 100)
}
function getPercentOf(e, t) {
    return e * t / 100
}
function increasePriceBy(e, t) {
    return parseFloat(e + getPercentOf(e, t))
}
function decreasePriceBy(e, t) {
    return parseFloat(e - getPercentOf(e, t))
}
function setInitialPrices() {
    jQuery("#wordCount").val(getWordsCount());
    jQuery("#price").val(getBasePrice());
    jQuery("#discount").val(getDiscount(getBasePrice()))
}
function setDiscount(e) {
    if (isNaN(getDiscount(e))) {
        jQuery("#discount").val(0)
    } else {
        jQuery("#discount").val(getDiscount(e).toFixed(2))
    }
}
function getPrice(e) {
    return e ? parseFloat(e) : getBasePrice()
}
function setFinalPrice(e) {
    e = e - getDiscount(e);
    jQuery("#finalPrice").val(e.toFixed(2))
}
function setPrice(e) {
    jQuery("#price").val(getPrice(e).toFixed(2));
    setDiscount(e);
    setFinalPrice(e)
}
function evaluatePaperQuality(e, t) {
    switch (e) {
    case "1st Class":
        t = increasePriceBy(t, 25);
        break
    }
    return t
}
function evaluateDeliveryTime(e, t) {
    switch (e) {
    case "4-5 Days":
        t = increasePriceBy(t, 10);
        break;
    case "3 Days":
        t = increasePriceBy(t, 15);
        break;
    case "2 Days":
        t = increasePriceBy(t, 20);
        break;
    case "24 Hour":
        t = increasePriceBy(t, 25);
        break
    }
    return t
}
function calculateFinalPrice() {
    var e = jQuery("#paperQuality option:selected").val();
    var t = jQuery("#education option:selected").val();
    var r = jQuery("#deliveryTime option:selected").val();
    var a = getPrice();
    setInitialPrices();
    a = evaluatePaperQuality(e, a);
    a = evaluateDeliveryTime(r, a);
    setPrice(a)
}
function onlyNumberKey(e) {
    var t = e.which ? e.which : e.keyCode;
    if (t > 31 && (t < 48 || t > 57))
        return false;
    return true
}
jQuery(document).ready(function(e) {
    var t = "return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)";
    var r = "this.value = this.value.replace(/[^0-9.]/g, '').replace(/(..*)./g, '$1');";
    e(".only-alpha").attr("onkeypress", t);
    e(".only-number").attr("onkeypress", "return onlyNumberKey(event)");
    e("#pages").bind("keyup mouseup", calculateFinalPrice);
    e("#paperQuality, #education, #deliveryTime").on("change", calculateFinalPrice)
});