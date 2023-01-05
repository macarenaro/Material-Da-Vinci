// ALERTAS
var alertPlaceholder = document.getElementById('liveAlertPlaceholder');
var original = document.getElementById('original');
var nuevo = document.getElementById('nuevo');

function alert(message, type,icono) {
  var wrapper = document.createElement('div');
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert"> <i class="bi bi-' + icono + '"></i>' + message + '<hr> <p>Texto aparte</p><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (original) {
  original.addEventListener('click', function () {
    alert('Alerta original', 'info', 'info-circle')
  })
}

if (nuevo) {
  nuevo.addEventListener('click', function () {
    alert('Alerta Nueva', 'danger', 'exclamation-circle')
  })
}

// POPOVERS
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

// TOOLTIPS
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
