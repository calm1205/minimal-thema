window.addEventListener('load', () => {
  const menuBtn = document.querySelector(`.fa-bars`);

  // メニューボタンを押した時
  menuBtn.addEventListener('click', () => {
    const menuDOM = document.querySelector(`.menu`);
    menuDOM.classList.remove('hidden');

    menuDOM.classList.add('show');
    document.querySelector(`html`).classList.add('ban-scroll');
    
    const closeDOM = document.querySelector(`.close`);
    closeDOM.addEventListener('click', () => {
      menuDOM.classList.add(`non-show`);
      setTimeout(function(){
        menuDOM.classList.add(`hidden`);
        document.querySelector(`html`).classList.remove('ban-scroll');
        menuDOM.classList.remove(`non-show`);
      }, 400);
    });
  });

  const searchBtn = document.querySelector(`.fa-search`);

  // 検索ボタンを押した時
  searchBtn.addEventListener('click', () => {
    const searchDOM = document.querySelector(`.search-view`);
    searchDOM.classList.remove('hidden');

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