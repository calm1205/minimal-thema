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
  
  // メニューバー スクロール位置でカラー変更
  window.addEventListener('scroll', ()=>{
    const header = document.querySelector('header');
    if( window.scrollY > document.documentElement.clientHeight){
      header.style.backgroundColor = 'white';
    }else{
      header.style.backgroundColor = '';
    }
  });
  
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