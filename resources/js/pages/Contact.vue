<template>
    <transition
             appear
            @before-enter='before'
            @enter='entering'
            >
<div class="container"> <h1 class="mt-5">Get In Touch</h1></div>
    </transition>
     <transition
             appear
            @before-enter='beforethe'
            @enter='enteringTo'
            >
  <div class="hi">
    <p class="p-4">
    Although I’m currently looking for any new opportunities <br>and working with greater minds, 
    my inbox is always open. <br>Whether you have a question or just want to say hi, I’ll try my best to get back to you!
    </p>
    <a href="mailto:obalolaluqman16@gmail.com" target="_blank">Say Hello!</a>
  </div>
     </transition>
  <section class=" p-4 rounded-3" style="min-height: 100px">
    <slot />
   
</section>
</template>

<script>
import layout from '../layout.vue'
import gsap from 'gsap'
export default {
 layout:layout,
 data(){
     const before = (el,) =>{
            el.style.transform = 'translatey(-50px)'
            el.style.opacity = 0
        }
        const entering = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,    
                delay:1,
                ease:'ease.in',
                onComplete:done
            })
        }
         const beforethe = (el,) =>{
            el.style.transform = 'translatey(50px)'
            el.style.opacity = 0
        }
        const enteringTo = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,    
                delay:1,
                ease:'ease.in',
                onComplete:done
            })
        }
        return{
          before,
          entering,
          beforethe,
          enteringTo
        }
 }
}

</script>

<style scoped>
.container{
  position: relative;
  max-width: 25em;
}
h1{
  text-align: center;
  font-weight: 600;
  font-size: 50px;
  color:#ccd6f6;
  font-family:sans-serif;
  position: relative;
  max-width: 25em;
}
  h1::before{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-bottom: 5px solid #64ffda;
        border-left: 5px solid #64ffda;
        bottom: 0;
        left: 0;
    }
     h1::after{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-top: 5px solid #64ffda;
        border-right: 5px solid #64ffda;
        top: 0;
        right: 0;
    }
    div .hi{
      text-align: center;
      font-size: 18px;
      font-weight: 500;
      line-height: 1.5em;
      color:#8892b0;
      font-family:sans-serif;
      margin: 10px;
    }
    a{
      margin-top: 10px;
      text-align: center;
      border: 1px solid #64ffda;
      padding: 15px 25px 15px 25px;
      font-size: 15px;
      font-weight: 500;
      border-radius: 4px;
      background: none;
      color: #64ffda;
      text-decoration: none;
      font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
    }
   div a:hover{
      /* #e6f1ff */
      background: rgba(100,255,218,0.1);
      transition: .3s;
      color: #64ffda;
    }
</style>