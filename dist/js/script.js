function getTotalProd(){
  var day_prod    = Number(document.ti_form.lime_prod_day.value);
  var night_prod  = Number(document.ti_form.lime_prod_night.value);

  var total_prod = day_prod + night_prod;

  document.getElementById('total_prod').value = total_prod;
}

function getTotalCash(){
  var opening_cash    = Number(document.ti_form.opening_cash.value);
  var receiving_cash  = Number(document.ti_form.receiving_cash.value);

  var total_cash = opening_cash + receiving_cash;

  document.getElementById('total_cash').value = total_cash;
}

function getTotalCost(){
  var prod_labor              = Number(document.ti_form.prod_labor.value);
  var daily_labor             = Number(document.ti_form.daily_labor.value);
  var labor_food              = Number(document.ti_form.labor_food.value);
  var staff_bazar             = Number(document.ti_form.staff_bazar.value);
  var staff_salary            = Number(document.ti_form.staff_salary.value);
  var office_stationary       = Number(document.ti_form.office_stationary.value);
  var other_expenses          = Number(document.ti_form.other_expenses.value);
  var pabar_sir_dilkusha_acc  = Number(document.ti_form.pabar_sir_dilkusha_acc.value);
  var pabar_sir_burimari_acc  = Number(document.ti_form.pabar_sir_burimari_acc.value);
  var pabar_sir_others        = Number(document.ti_form.pabar_sir_others.value);
  var total_cash              = Number(document.ti_form.total_cash.value);

  var total_cost = prod_labor + daily_labor + labor_food + staff_bazar + staff_salary + office_stationary + other_expenses + pabar_sir_dilkusha_acc + pabar_sir_burimari_acc + pabar_sir_others;
  var closing_cash = total_cash - total_cost;
  

  document.getElementById('total_cost').value = total_cost;
  document.getElementById('closing_cash').value = closing_cash;

}