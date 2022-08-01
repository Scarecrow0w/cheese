<template>
  <div class="wrapper">
    <div class="mail">
      <div class="cover"></div>
      <div class="letter">
        <form action="POST">
          <label for="" class="mt-4 ml-4"> Ваш электронный адрес </label>
          <input
            type="text"
            class="
              block
              rounded
              sm:text-sm
              border-secondary
              focus:border-none
              mx-auto
              border-2
            "
          />
          <label for="" class="mt-4 ml-4"> Ваше сообщение </label>
          <textarea
            name="message"
            class="
              block
              rounded
              sm:text-sm
              border-secondary
              focus:border-none
              mx-auto
              border-2
            "
          ></textarea>
          <div class="w-full">
            <button
            class="
              bg-secondary
              text-lightbg
              px-6
              py-3
              rounded-lg
              mx-auto
              mt-5
              hover:bg-hover
            "
          >
            Отправить
          </button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.wrapper {
  position: absolute;
  /* top: 50%; */
  left: 50%;
  transform: translate(-50%);
}
.mail {
  position: relative;
  width: 300px;
  height: 200px;
  background-color: #fdffb6;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  transform-style: preserve-3d;
  transform: rotateZ(7deg);
  cursor: pointer;
  transition: all .5s ease;
}
.mail::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  border-left: 150px solid transparent;
  border-right: 150px solid #ff8500;
  border-top: 100px solid transparent;
  border-bottom: 100px solid #ff8500;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  z-index: 5;
}
.mail::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-left: 150px solid #ffb600;
  border-right: 150px solid transparent;
  border-top: 100px solid transparent;
  border-bottom: 100px solid #ffb600;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  z-index: 4;
}
.cover::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-left: 150px solid transparent;
  border-right: 150px solid transparent;
  border-top: 100px solid #fdffb6;
  border-bottom: 100px solid transparent;
  z-index: 6;
  transform-origin: top;
  transform: rotateX(0deg);
  transition: all 1s 1s ease;
}
.letter {
  position: absolute;
  top: 0;
  left: 10px;
  background-color: #fff;
  width: 280px;
  height: 180px;
  border-radius: 20px;
  transition: all 1s ease;
  z-index: 3;
  border: #491e17 1px solid;
  overflow: hidden;
}
.letter h3 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 80px;
  color: #491e17;
}
.mail:hover {
  transform: rotateZ(0deg);
}
.mail:hover .cover::before {
  transform: rotateX(180deg);
  transition: all 1s ease;
  z-index: 2;
}
.mail:hover .letter {
  top: -250px;
  transition: all 1s 1s ease;
  height: 360px;
}
</style>