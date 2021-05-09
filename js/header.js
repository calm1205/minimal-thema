window.addEventListener('DOMContentLoaded', ()=>{
  // ファーストビューの読み込みUI
  const firstViewDOM = document.querySelector('.firstView');
  firstViewDOM.addEventListener('animationstart', ()=>{
    setTimeout(function(){
      firstViewDOM.style.display = 'none';
    }, 4500);
  });

  if(!localStorage.getItem('is_first?')){
    localStorage.setItem('is_first?', 1);
  }else{
    firstViewDOM.style.display = 'none';
    const title     = document.querySelector('.top h1');
    const sub_title = document.querySelector('.top-title-sub')
    title.style.animation = 'none';
    title.style.width = '100%';
    sub_title.style.animation = 'none';
    sub_title.style.opacity = '1';
  };

  // カテゴリーで非表示にしたいカテゴリー
  const invisibleCategory = 'PROGRAMING';
  const categories = Array.from(document.querySelectorAll('.article-top-category a'));
  categories.forEach((category)=>{
    const categoryText = category.textContent;
    if ( categoryText == invisibleCategory){
      category.style.display = 'none';
    }
  });
});

window.addEventListener('load', () => {
  // メニューリスト
  const pullDownDOMArray = Array.from(document.querySelectorAll(`.header-menu li`));
  pullDownDOMArray.forEach( (pullDownDOM) => {
    const childPullDownDOMs = Array.from(pullDownDOM.querySelectorAll(`.sub-menu li`));
    childPullDownDOMs.forEach((childPullDown, index)=>{
      childPullDown.style.transitionDelay = `${0.1 * index}s`;
      childPullDown.style.top             = `${70 + 70*(index)}px`
    });
  });
  
  // スクロール時のアニメーション
  const header = document.querySelector('header');
  const articles = Array.from(document.querySelectorAll('.article'));
  window.addEventListener('scroll', ()=>{
    const windowHeight = window.innerHeight;
    if( window.scrollY > windowHeight){
      header.style.backgroundColor = 'white';
    }else{
      header.style.backgroundColor = '';
    };
    articles.forEach((article)=>{
      domDisplayControl(windowHeight,article);
    });
    const greetDOM = document.querySelector('.greet-box');
    if (greetDOM){
      domDisplayControl(windowHeight, greetDOM);
    }
  });
  
  // スクロールした時に下からフェードインするアニメーション
  function domDisplayControl(windowHeight,dom){
    const domTop = dom.getBoundingClientRect().top;
    const scroll = window.pageYOffset;
    const offset = domTop + scroll;
    if( scroll > offset - windowHeight + 200 ){
      dom.classList.add('active');
    }
  }

  // 画面を開いた時の位置が低ければ最初から記事や小見出しを表示
  articles.forEach((article)=>{ domDisplayControl(window.innerHeight, article); });
  const greetDOM = document.querySelector('.greet-box');
  if (greetDOM){
    domDisplayControl(window.innerHeight, greetDOM);
  }

  // メニューボタンを押した時
  document.querySelector(`.fa-bars`).addEventListener('click', () => {
    // 展開メニューの表示
    const openMenuDOM = document.querySelector(`.menu`);
    openMenuDOM.classList.remove('hidden');
    openMenuDOM.classList.add('show');
    document.querySelector('.header-menu').style.display = 'block';
    document.querySelector(`html`).classList.add('ban-scroll');

    // + - ボタンの制御
    const parentMenuDOMs = Array.from(document.querySelectorAll('.menu-item'));
    parentMenuDOMs.forEach((parentMenu)=>{
      const subMenu = parentMenu.querySelector('.sub-menu');
      if (subMenu){
        if(!parentMenu.querySelector('i')){
          parentMenu.insertAdjacentHTML('beforeend', '<i class="fas fa-plus"></i>');
          parentMenu.insertAdjacentHTML('beforeend', '<i class="fas fa-minus"></i>');
          const plusBtn  = parentMenu.querySelector('.fa-plus');
          const minusBtn = parentMenu.querySelector('.fa-minus');
          plusBtn.addEventListener('click',()=>{
            subMenu.style.display  = 'block';
            plusBtn.style.display  = 'none';
            minusBtn.style.display = 'block';
          });
          minusBtn.addEventListener('click',()=>{
            subMenu.style.display  = 'none';
            plusBtn.style.display  = 'block';
            minusBtn.style.display = 'none';
          });
        }
      }
    });
    
    // 途中でウィンドウサイズが変更された時
    window.addEventListener('resize', () => {
      if ( window.outerWidth >= 960 ){
        openMenuDOM.classList.remove('show');
        openMenuDOM.classList.add('hidden');
        document.querySelector(`html`).classList.remove('ban-scroll');
      };
    });

    // closeボタンが押された時
    document.querySelector(`.close`).addEventListener('click', () => {
      openMenuDOM.classList.add(`non-show`);
      setTimeout(function(){
        openMenuDOM.classList.add(`hidden`);
        document.querySelector(`html`).classList.remove('ban-scroll');
        openMenuDOM.classList.remove(`non-show`);
      }, 400);
    });
  });

  // 検索ボタンを押した時
  document.querySelector(`.fa-search`).addEventListener('click', () => {
    const searchDOM = document.querySelector(`.search-view`);
    searchDOM.classList.remove('hidden');
    document.querySelector(`.search-view-box-input`).focus();

    searchDOM.classList.add('down');
    document.querySelector(`html`).classList.add('ban-scroll');
    
    // xボタンを押した時
    const closeDOM = document.querySelector(`.fa-times`);
    closeDOM.addEventListener('click', () => {
      searchDOM.classList.add(`upper`);
      setTimeout(function(){
        searchDOM.classList.add(`hidden`);
        document.querySelector(`html`).classList.remove('ban-scroll');
        searchDOM.classList.remove(`upper`);
      }, 450);
    });
  });


});