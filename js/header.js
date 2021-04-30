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
  // プルダウンメニューリスト
  const pullDownDOMArray = Array.from(document.querySelectorAll(`.header-menu li`));
  pullDownDOMArray.forEach( (pullDownDOM) => {
    const childPullDownDOMs = Array.from(pullDownDOM.querySelectorAll(`.sub-menu li`));
    childPullDownDOMs.forEach((childPullDown, index)=>{
      childPullDown.style.transitionDelay = `${0.1 * index}s`;
      childPullDown.style.top = `${70 + 70*(index)}px`
    });
  });
  
  const header = document.querySelector('header');
  const articles = Array.from(document.querySelectorAll('.article'));
  window.addEventListener('scroll', ()=>{
    // メニューバー スクロール位置でカラー変更
    const windowHeight = window.innerHeight;
    if( window.scrollY > windowHeight){
      header.style.backgroundColor = 'white';
    }else{
      header.style.backgroundColor = '';
    }
    // スクロールで記事表示
    articles.forEach((article)=>{
      domDisplayControl(windowHeight,article);
    });

    // スクロールで最初の小見出し表示
    domDisplayControl(windowHeight, document.querySelector('.greet-box'));
  });
  
  function domDisplayControl(windowHeight,dom){
    const domTop = dom.getBoundingClientRect().top;
    const scroll = window.pageYOffset;
    const offset = domTop + scroll;
    if( scroll > offset - windowHeight + 200 ){
      dom.classList.add('active');
    }
  }
  // スクロール位置が低ければ最初から記事表示
  articles.forEach((article)=>{
    domDisplayControl(window.innerHeight, article);
  });
  domDisplayControl(window.innerHeight, document.querySelector('.greet-box'));


  const menuBtn = document.querySelector(`.fa-bars`);
  // メニューボタンを押した時
  menuBtn.addEventListener('click', () => {
    // 展開メニューの表示
    const openMenuDOM = document.querySelector(`.menu`);
    openMenuDOM.classList.remove('hidden');
    openMenuDOM.classList.add('show');
    
    document.querySelector('.header-menu').style.display = 'block';
    document.querySelector('.sub-menu').style.display = 'block';
    
    document.querySelector(`html`).classList.add('ban-scroll');
    
    // 途中でウィンドウサイズが変更された時
    window.addEventListener('resize', () => {
      if ( window.outerWidth >= 960 ){
        openMenuDOM.classList.remove('show');
        openMenuDOM.classList.add('hidden');
        document.querySelector(`html`).classList.remove('ban-scroll');
      };
    });

    // closeボタンが押された時
    const closeDOM = document.querySelector(`.close`);
    closeDOM.addEventListener('click', () => {
      openMenuDOM.classList.add(`non-show`);
      setTimeout(function(){
        openMenuDOM.classList.add(`hidden`);
        document.querySelector(`html`).classList.remove('ban-scroll');
        openMenuDOM.classList.remove(`non-show`);
      }, 400);
    });
  });

  const searchBtn = document.querySelector(`.fa-search`);

  // 検索ボタンを押した時
  searchBtn.addEventListener('click', () => {
    const searchDOM = document.querySelector(`.search-view`);
    searchDOM.classList.remove('hidden');
    document.querySelector(`.search-view-box-input`).focus();

    searchDOM.classList.add('down');
    document.querySelector(`html`).classList.add('ban-scroll');
    
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