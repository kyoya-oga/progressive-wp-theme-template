// 375px以下の場合、viewportを固定
export function fixViewport() {
  const viewport = document.querySelector('meta[name="viewport"]');
  const width = window.screen.width || window.innerWidth;
  const content = viewport.getAttribute('content');
  if (width <= 375) {
    const viewport375 = 'width=375';

    if (content !== viewport375) {
      viewport.setAttribute('content', viewport375);
    }
  } else {
    const viewportNormal = 'width=device-width, initial-scale=1';
    if (content !== viewportNormal) {
      viewport.setAttribute('content', viewportNormal);
    }
  }
}
