/**
 * 
 * @param {String} img 
 * @returns {String} path of the photo
 */

const getImgPath = (img) => {
    return `https://dev4a.online/public/assets/${img}`;   //  PROD
    //return `http://[::1]:5173/public/assets/${img}`;  //  LOCAL
};

export { getImgPath };