createPageTransition();
// setInterval(createPageTransition, 4000);

function createPageTransition() {
  const el = document.createElement('div');
  el.className = 'page-transition';
  const overlay = document.createElement('div');
  overlay.className = 'page-transition__overlay';
  el.appendChild(overlay);
  document.body.appendChild(el);


  setTimeout(() => {
    el.className = 'page-transition page-transition--in';
  }, 0);
  setTimeout(() => {
    el.className = 'page-transition page-transition--out';
  }, 1800);
  
  setTimeout(() => {
    el.remove();
  }, 3000);
};

