<div id="container">
    <img class="img" src='https://ifh.cc/g/Lm33rl.png'/>
    <img class="img" src="https://cdn.pixabay.com/photo/2017/05/08/13/15/bird-2295431_1280.jpg" />
    <img class="img" src="https://cdn.pixabay.com/photo/2020/12/30/14/23/waterfall-5873630_1280.jpg" />

</div>

<script>
    const images = document.querySelectorAll('.img');
    let current = 0;

    function showSlide() {
      for(let i = 0; i < images.length; i++) {
        images[i].classList.remove('on');
      }
      current++;
      if(current > images.length) {
        current = 1;
      }
      images[current - 1].classList.add('on');
      setTimeout(showSlide, 2000); // 이미지 전환 간격(ms)을 조절하려면 이 부분 수정
    }

    showSlide();
  </script>

