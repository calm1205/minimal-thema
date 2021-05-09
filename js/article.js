window.addEventListener('DOMContentLoaded', ()=>{
  if (!document.querySelector('.article-detail')){ return false;}
  // 目次の作成
  const tableOfContent = document.querySelector('.article-table');
  const tableOfContentSide = document.querySelector('.article-table-side')
  const titleDOMs      = Array.from(document.querySelectorAll('h2,h3'));

  titleDOMs.forEach((title, index)=>{
    const rank = Number(title.tagName.substring(1));
    let tableContent = '';
    if (rank === 2){
      tableContent += `<div class="article-table-title">${title.textContent}</div>`
    }else if(rank === 3){
      tableContent += `<div class="article-table-title sub">${title.textContent}</div>`
    }else{}
    tableOfContent.insertAdjacentHTML('beforeend',tableContent);
    tableOfContentSide.insertAdjacentHTML('beforeend',tableContent);

    const tableContentDOM = document.querySelectorAll('.article-table-title:last-child')[0];
    tableContentDOM.addEventListener('click',(e)=>{
      scrollTo(0, window.pageYOffset + title.getBoundingClientRect().top - 100);
      e.preventDefault();
      e.stopPropagation();
    })
  });

  // サイド目次の表示制御
  window.addEventListener('scroll',()=>{
    const scroll = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const sideHeight = document.querySelector('.side').getBoundingClientRect().top;
    if ( scroll < windowHeight ){
      tableOfContentSide.style.display = 'none';
    }else if( sideHeight < windowHeight ){
      tableOfContentSide.style.display = 'none';
    }else{
      tableOfContentSide.style.display = 'block';
    }
  });

  // サイド目次の初期表示
  const firstTableOfContentSideDisplay = ()=>{
    const scroll = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const sideHeight = document.querySelector('.side').getBoundingClientRect().top;
    if( scroll < windowHeight || sideHeight < windowHeight ){
      tableOfContentSide.style.display = 'none';
    }
  };
  firstTableOfContentSideDisplay();

});