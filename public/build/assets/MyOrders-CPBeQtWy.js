import{_ as r}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{o as l,c as a,a as e,F as n,s as c,t}from"./app-sxmKPskq.js";const d={name:"MyOrders",props:{orders:{type:Array,default:[]}},mounted(){console.log(this.orders)}},i={class:"flex flex-col items-center h-fit w-full"},f={class:"flex flex-col gap-6 w-full md:w-4/5 h-fit"},u={class:"flex flex-col md:flex-row md:justify-between w-full md:w-4/5 border p-3"},p={class:"flex gap-1"};function _(m,x,o,h,g,w){return l(),a("div",i,[e("div",f,[(l(!0),a(n,null,c(o.orders,(s,y)=>(l(),a("div",u,[e("div",p,[e("p",null,"Le: "+t(s.created_at.substring(0,10)),1),e("p",null,"à: "+t(s.created_at.substring(11,16)),1)]),e("p",null,"payé: "+t(s.amount_paid),1),e("p",null," status: "+t(s.status),1)]))),256))])])}const B=r(d,[["render",_]]);export{B as default};
