import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

/**
 * 
 * @param {String} img 
 * @returns {String} path of the photo
 */

const getImgPath = (img) => {
    return `https://dev4a.online/public/assets/${img}`;   //  PROD
    //return `http://[::1]:5173/public/assets/${img}`;  //  LOCAL
};

/**
 * 
 * @param {String} img 
 * @returns {String} path of the photo
 */

const toaster = (text, type) => {
    const card = toast(text, {
        autoClose: 3000,
        closeOnClick: true,
        type: type,
        position: 'bottom-right',
    });
    return card;
};

export { getImgPath, toaster };