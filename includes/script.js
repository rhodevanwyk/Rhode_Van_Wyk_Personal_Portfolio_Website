var barsAnimated = false;
function animateBars() {
  if (barsAnimated) return;
  var section = document.getElementById("about");
  var rect = section.getBoundingClientRect();
  if (rect.top < window.innerHeight - 100) {
    barsAnimated = true;
    document.querySelectorAll(".skill_bar_fill").forEach(function (el) {
      el.style.width = el.getAttribute("data-pct") + "%";
    });
  }
}
window.addEventListener("scroll", animateBars);
animateBars();

/* ── ORBIT DONUT CHART ── */
var segments = [
  {
    label: "Backend Dev",
    sub: "PHP · MySQL · APIs",
    pct: 35,
    color: "#7a3e8e",
  },
  {
    label: "UI Design",
    sub: "Figma · CSS · Tailwind",
    pct: 28,
    color: "#c8f0a0",
  },
  { label: "Frontend", sub: "JS · HTML · jQuery", pct: 20, color: "#a87fba" },
  { label: "Learning", sub: "Always. Forever.", pct: 17, color: "#3d1f4e" },
];

var svg = document.getElementById("orbitSvg");
var valEl = document.getElementById("orbitVal");
var lblEl = document.getElementById("orbitLbl");
var cx = 160,
  cy = 160,
  r = 130;
var TAU = Math.PI * 2;
var GAP_PX = 5;
var paths = [];
var start = 0;

function makeArc(cx, cy, r, a1, a2) {
  var sx = cx + r * Math.cos(a1);
  var sy = cy + r * Math.sin(a1);
  var ex = cx + r * Math.cos(a2);
  var ey = cy + r * Math.sin(a2);
  var large = a2 - a1 > Math.PI ? 1 : 0;
  return (
    "M " +
    sx +
    " " +
    sy +
    " A " +
    r +
    " " +
    r +
    " 0 " +
    large +
    " 1 " +
    ex +
    " " +
    ey
  );
}

segments.forEach(function (seg, i) {
  var angle = (seg.pct / 100) * TAU;
  var gapAngle = GAP_PX / r;
  var a1 = start + gapAngle / 2;
  var a2 = start + angle - gapAngle / 2;

  var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path.setAttribute("d", makeArc(cx, cy, r, a1, a2));
  path.setAttribute("stroke", seg.color);
  path.setAttribute("stroke-width", "20");
  path.setAttribute("fill", "none");
  path.setAttribute("stroke-linecap", "round");
  path.style.cursor = "pointer";
  path.style.transition = "stroke-width 0.2s, opacity 0.2s";

  (function (p, s, idx) {
    p.addEventListener("mouseenter", function () {
      paths.forEach(function (pp) {
        pp.style.opacity = "0.3";
      });
      p.style.opacity = "1";
      p.style.strokeWidth = "28";
      valEl.textContent = s.pct + "%";
      lblEl.textContent = s.label;
      document.querySelectorAll(".brain_legend_item").forEach(function (li, j) {
        li.classList.toggle("active", j === idx);
      });
    });
    p.addEventListener("mouseleave", function () {
      paths.forEach(function (pp) {
        pp.style.opacity = "1";
        pp.style.strokeWidth = "20";
      });
      valEl.textContent = "—";
      lblEl.textContent = "hover a slice";
      document.querySelectorAll(".brain_legend_item").forEach(function (li) {
        li.classList.remove("active");
      });
    });
  })(path, seg, i);

  svg.appendChild(path);
  paths.push(path);
  start += angle;
});

/* Legend */
var legendEl = document.getElementById("brainLegend");
segments.forEach(function (seg, i) {
  var item = document.createElement("div");
  item.className = "brain_legend_item";
  item.innerHTML =
    '<div class="brain_legend_dot" style="background:' +
    seg.color +
    '"></div>' +
    '<div class="brain_legend_info">' +
    '<div class="brain_legend_name">' +
    seg.label +
    "</div>" +
    '<div class="brain_legend_sub">' +
    seg.sub +
    "</div>" +
    "</div>" +
    '<div class="brain_legend_pct">' +
    seg.pct +
    "%</div>";

  (function (el, idx) {
    el.addEventListener("mouseenter", function () {
      paths.forEach(function (p) {
        p.style.opacity = "0.3";
      });
      paths[idx].style.opacity = "1";
      paths[idx].style.strokeWidth = "28";
      valEl.textContent = segments[idx].pct + "%";
      lblEl.textContent = segments[idx].label;
      el.classList.add("active");
    });
    el.addEventListener("mouseleave", function () {
      paths.forEach(function (p) {
        p.style.opacity = "1";
        p.style.strokeWidth = "20";
      });
      valEl.textContent = "—";
      lblEl.textContent = "hover a slice";
      el.classList.remove("active");
    });
  })(item, i);

  legendEl.appendChild(item);
});
