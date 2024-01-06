const tl = gsap.timeline({duration:1,ease: "expo.inOut",});

tl.from('.img-wrapper-main',{
    clipPath: 'inset(100% 0 0 0)',
    duration:.9,
    ease: "circ.inOut",
})
tl.from('.img-wrapper',{
    clipPath: 'inset(100% 0 0 0)',
    stagger:.1,
    delay:.2,
    duration:1.8,
    ease: "expo.out",
})
tl.to('.loading-screen',{
    yPercent:-100,
    ease: "expo.in",
    duration:1.2
},"<1.4")

tl.from('.form-container-center',{
	yPercent:100,
	duration:1.2,
	ease: "circ.in",
    opacity:0,
},'<.1')
tl.from('.container',{
	duration:1.2,
    ease: "circ.out",
    width:1000
},'<1')
