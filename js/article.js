window.addEventListener("DOMContentLoaded", () => {
  if (!document.querySelector(".article-detail")) {
    return false;
  }
  // 目次の作成
  const tableOfContent = document.querySelector(".article-table");
  const tableOfContentSide = document.querySelector(".article-table-side");
  const titleDOMs = Array.from(document.querySelectorAll("h2,h3"));

  titleDOMs.forEach((title) => {
    const rank = Number(title.tagName.substring(1));
    const tableContent = document.createElement("div");
    rank === 2 && tableContent.setAttribute("class", "article-table-title");
    rank === 3 && tableContent.setAttribute("class", "article-table-title sub");
    tableContent.innerText = title.textContent;
    sideTableContent = tableContent.cloneNode(true);
    const addScrollEvent = (target, title) => {
      target.addEventListener("click", (e) => {
        scrollTo(0, window.pageYOffset + title.getBoundingClientRect().top - 100);
        e.preventDefault();
        e.stopPropagation();
      });
    }
    addScrollEvent(tableContent, title);
    addScrollEvent(sideTableContent, title);
    tableOfContent.appendChild(tableContent);
    tableOfContentSide.appendChild(sideTableContent);
  });

  // サイド目次の表示制御
  window.addEventListener("scroll", () => {
    const scroll = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const sideHeight = document
      .querySelector(".side")
      .getBoundingClientRect().top;
    if (scroll < windowHeight) {
      tableOfContentSide.style.display = "none";
    } else if (sideHeight < windowHeight) {
      tableOfContentSide.style.display = "none";
    } else {
      tableOfContentSide.style.display = "block";
    }
  });

  // サイド目次の初期表示
  const firstTableOfContentSideDisplay = () => {
    const scroll = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const sideHeight = document
      .querySelector(".side")
      .getBoundingClientRect().top;
    if (scroll < windowHeight || sideHeight < windowHeight) {
      tableOfContentSide.style.display = "none";
    }
  };
  firstTableOfContentSideDisplay();
});
