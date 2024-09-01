import{Z as r,B as a,o as n,c,k as i,a as e,t as s,F as l}from"./app-vCdMRrgH.js";import{_ as d}from"./_plugin-vue_export-helper-DlAUqK2U.js";const u={name:"Error",components:{Head:r},props:{status:Number},computed:{title(){return{503:"503: Service Unavailable",500:"500: Server Error",404:"404: Page Not Found",403:"403: Forbidden"}[this.status]},description(){return{503:"Sorry, we are doing some maintenance. Please check back soon.",500:"Whoops, something went wrong on our servers.",404:"Sorry, the page you are looking for could not be found.",403:"Sorry, you are forbidden from accessing this page."}[this.status]}}},p={class:"h-fit w-full"},_={class:"h-screen relative"},m=e("img",{src:"../../public/assets/st-quentin.jpg",alt:"Drapeau des jeux olympiques de Paris 2024",class:"object-cover h-full w-full"},null,-1),f={class:"absolute top-1/3 w-full flex justify-center"},h={class:"w-3/4 md:w-2/6 p-10 rounded-xl flex flex-col items-center gap-6 bg-white"},g={class:"text-xl font-bold"},b={class:"w-full"},v=e("a",{class:"bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300",href:"/"}," Retour à l'accueil ",-1);function w(x,y,k,S,E,o){const t=a("Head");return n(),c(l,null,[i(t,{title:"Error"}),e("div",p,[e("div",_,[m,e("main",f,[e("div",h,[e("h1",g,s(o.title),1),e("p",b,s(o.description),1),v])])])])],64)}const F=d(u,[["render",w]]);export{F as default};
