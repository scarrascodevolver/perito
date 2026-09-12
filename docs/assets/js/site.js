/* Animaciones sutiles: aparición al hacer scroll y entrada del hero.
   Se desactivan solas si el usuario tiene "reducir movimiento" activado. */
(function () {
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) return;
  document.documentElement.classList.add('anim');

  // Elementos que aparecen al entrar en pantalla
  var sel = '.sec-head, .card, .step, .person, .faq details, .info-list li, .cta-band, .logos img, ' +
            '.two-col > *, .contact > *, .local > .map, .prose > h2, .prose > ul, .prose > p, .notice, form.f, .trust span';
  var items = Array.prototype.slice.call(document.querySelectorAll(sel));

  // Retardo escalonado según la posición entre hermanos (máx. 6 pasos)
  items.forEach(function (el) {
    var i = 0, s = el;
    while ((s = s.previousElementSibling) && i < 6) { if (items.indexOf(s) > -1) i++; }
    el.classList.add('rv');
    el.style.transitionDelay = (i * 70) + 'ms';
  });

  if (!('IntersectionObserver' in window)) {
    items.forEach(function (el) { el.classList.add('in'); });
    return;
  }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    });
  }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
  items.forEach(function (el) { io.observe(el); });

  // Cifras del hero: cuenta desde 0 (solo si el valor empieza por número)
  document.querySelectorAll('.hero .stats b').forEach(function (b) {
    var m = b.textContent.match(/^(\d+)(.*)$/);
    if (!m) return;
    var target = parseInt(m[1], 10), rest = m[2], t0 = null, dur = 1200;
    function step(t) {
      if (!t0) t0 = t;
      var p = Math.min(1, (t - t0) / dur), e = 1 - Math.pow(1 - p, 3);
      b.textContent = Math.round(target * e) + rest;
      if (p < 1) requestAnimationFrame(step);
    }
    setTimeout(function () { requestAnimationFrame(step); }, 500);
  });
})();
