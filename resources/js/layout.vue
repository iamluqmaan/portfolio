<template> 
<nav class="navbar navbar-expand-lg  navbar-dark  p-2 shadow">
  <div class="container-fluid shadow">
    <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
    <Link class="navbar-brand" href="/"><div id="brand"><span class="brand-text">L</span></div></Link>
    </transition>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
        <ul class="navbar-nav links p-2 ms-auto">
        <li class="nav-item">
           <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
            <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home </Link>
          </transition>
        </li>
        <li class="nav-item">
           <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about"> About </Link>
          </transition>
        </li>
        <li class="nav-item">
            <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
          <Link class="nav-link" :class="{'selected': $page.component=='Project'}" href="/project"> Project </Link>
          </transition>
        </li>
        <li class="nav-item">
            <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
          <Link class="nav-link" :class="{'selected': $page.component=='Contact'}" href="/contact"> Contact </Link>
          </transition>
        </li>
         <transition
             appear
            @before-enter='beforeEntering'
            @enter='enterthe'
            >
         <li class="resume nav-item rounded-3" style="border:1px solid #64ffda;text-align:center">
          <!-- <Link class="nav-link" :class="{'selected': $page.component=='Resume'}" href="../data/resume.txt" download> Resume </Link> -->
           <a class="resume nav-link" href="./data/resume.txt" download="resume.pdf" target="_blank">Resume</a>
        </li>
        </transition>
      </ul>
      
         <div class="mt-2 p-2">
        <label>
          <input type="checkbox">
            <span title="Adjust brightness" class="check" @click="toggleBackground(mode)"></span>
        </label>
         </div> 
         <transition
             appear
            @before-enter='before'
            @enter='enterTo'
            >      
        <a href="mailto:obalolaluqman16@gmail.com" class="mail">obalolaluqman16@gmail.com </a>
         </transition>
    </div>
  
  </div>
  
</nav>
 <section class=" app p-1 rounded-4 shadow " :class="mode">
  <transition name="page" mode="out-in" appear>
    <div :key="$page.url">
    <slot /> 
    </div>
  </transition>
     <transition
             appear
            @before-enter='before'
            @enter='enterTo'
            >    
<div class="social mt-4">
      <a href="https://www.linkedin.com/in/luqman-obalola-4a9a25236" target="_blank">
      <i class="fab fa-linkedin-in"></i></a>
      <a href="https://wa.me/message/RTHQVXNBPHFSK1" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href=""><i class="fa-brands fa-github"></i></a>
</div>
</transition>
</section>

</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import gsap from 'gsap'
  export default{
   components:{Link},
  
   data() {
     const beforeEnter = (el,) =>{
            el.style.transform = 'translatey(-50px)'
            el.style.opacity = 0
        }
        const enter = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 2,    
                delay:2,
                onComplete:done
            })
        }
        const before = (el,) =>{
            el.style.transform = 'transform: rotate(-270deg) translatex(100%);'
            el.style.opacity = 0
        }
        const enterTo = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 4,    
                delay:3,
                onComplete:done,
                ease:'bounce.out',
            })
        }
         const beforeEntering = (el) =>{
            el.style.transform = 'translateY(-60px)'
            el.style.opacity = 0
        }
        const enterthe = (el, done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,
                delay: 2,
                ease: 'bounce.out',
                onComplete:done
            })
        }
        
      return{
         mode: 'dark',
         beforeEnter,
         enter,
         before,
         enterTo,
         beforeEntering,
         enterthe
         
         
      }
   },
   methods: {
    toggleBackground(){
      if (this.mode === 'dark') {
        this.mode = 'light'
      }else{
        this.mode = 'dark'
      }
    },
    download () {
      const url = '/resources/data/resume.txt';
      window.location.href = url;
    },
   }
}
</script>

<style>
.page-enter-active,
.page-leave-active{
  transition: all .5s;
}
.page-enter,
.page-leave-active{
  opacity: 0;
}
 * {
    max-width: 100%;
    box-sizing: border-box;
    margin: 0, auto;
}
::-webkit-scrollbar{
  scroll-behavior: smooth;
  width: 7px;
  
}
::-webkit-scrollbar-track{
  background: #0a192f;
}
::-webkit-scrollbar-thumb{
  background: linear-gradient(#a8b2d1,#0a192f);
  border-radius: 100vw;
}
::-webkit-scrollbar-thumb:hover{
  background: linear-gradient(#0a192f,#a8b2d1);
  transition: .4s;
}
@supports (scrollbar-color: #a8b2d1){
  *{
    scrollbar-color: #a8b2d1 #0a192f;
    scrollbar-width: thin;
  }
}
nav ul li{
   font-size: 15px; 
   font-weight: 700;
   margin: 5px;
}
nav ul li .resume{
  color: #64ffda;
}
nav ul li .resume :hover{
  background: #a8b2d1;
}
 .mail{
    color: #a8b2d1;
    text-decoration: none;
    opacity: .4;
    position: fixed;
    right:0;
    bottom: 55%;
    left: 90%;
    transform: rotate(-270deg) translatex(100%);
    font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
    letter-spacing: 2px;
    margin: 0 auto;
    display:border-box ;
    max-width:13px;
   }
   .mail:hover{
    color: #64ffda;
    opacity: 1;
    font-size:17px ;
    bottom: 58%;
    transition: .3s ease-in-out;
   }
#brand{
   border: 2px solid #64ffda;
   left: 0;
   right: 0;
   top: 1.8rem;
   width: 40px;
   height: 40px;
   border-radius: 50%;
   text-align: center;
   vertical-align: center;
  margin: auto;
}
.brand-text{
  font-size: 1.125;
  color: #a8b2d1;
  font-weight: bold;
  line-height: 40px;
}
.navbar-dark .navbar-nav .nav-link{
  color: #a8b2d1;
  font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;

}

.selected {
    font-weight: bold;
    color: #64ffda !important;
}
footer{
  color: #a8b2d1;
}
.check{
  display: block;
  position: relative;
  width: 35px;
  height: 16px;
  background:#0a192f;
  border: 1px solid #a8b2d1;
  /* opacity: .4; */
  cursor: pointer;
  border-radius: 20px;
  overflow: hidden;
  transition: ease-in 0.5s;
}
input{
  display: none;
}
input:checked ~ .check{
  background: #1d2c42;
  border: 1px solid #a8b2d1;
  /* box-shadow: 0 0 0 1200px rgb(255, 255, 255); */
}
.check:before{
  content: '';
  position: absolute;
  top: 2px;
  left: 2px;
  background: #64ffda;
  width: 11px;
  height: 11px;
  border-radius: 50%;
  transition: 0.5s;
}
input:checked ~ .check:before{
  transform: translateX(-350px);
}

.check:after{
  content: '';
  position: absolute;
  top: 2px;
  left: 2px;
  background: #64ffda;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  transition: 0.5s;
  transform: translateX(350%);
}
input:checked ~ .check:after{
  transform: translateX(0px);
}
*{
  margin: 0;
}
.app {
 background: #1d2c42;
  transition: ease-in .6s;
  min-height: 100%;
  max-width: 100%;

}
.dark{
  /* background-image: url(../js/images/oop.jpg); */
  background: #0a192f;
  min-height: 100%;
  max-width: 100%;
  transition: ease-in .6s; 
}
section .social i{
 padding-left: 20px;
  color: #a8b2d1;
  font-size: 25px;
  margin-top: 0px; 
}
section .social i:hover{
  color:#64ffda;
  transition: .5s;
}
/* .route-enter-from{
  opacity: 0;
  transform: translateX(100px);
}
.route-enter-active{
  transition: all 0.3s ease-out;
}
.route-leave-to{
  opacity: 0;
  transform: translateX(-100px);
}
.route-leave-active{
  transition: all 0.3s ease-in;
} */

</style>