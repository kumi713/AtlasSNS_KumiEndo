import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// headers.forEach(header => {
//   header.addEventListener('click', () => {
//     const content = header.nextElementSibling;

//     // 内容の表示・非表示を切り替え
//     if (content.style.display === 'block') {
//       content.style.display = 'none'; // 隠す
//       header.classList.remove('active'); // アクティブな状態を削除
//     } else {
//       content.style.display = 'block'; // 表示する
//       header.classList.add('active'); // アクティブな状態を追加
//     }
//   });
// });
const toggleButton = document.querySelector('.accordion-toggle');
const menu = document.querySelector('.menu-list');

toggleButton.addEventListener('click', () => {
  // ボタンとメニューの両方にクラスをつけ外しする
  toggleButton.classList.toggle('is-open');
  menu.classList.toggle('is-open');
});