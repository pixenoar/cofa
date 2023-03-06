import './bootstrap';

// Bootstrap

import 'bootstrap';

// Pixeno

const canvas = new bootstrap.Offcanvas('#canvasMenu');
document.getElementById("canvasMenu").addEventListener("click", ocultar);
function ocultar(){ canvas.hide(); }