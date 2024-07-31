/**
 * 
 * @param {String} img 
 * @returns {String} path of the photo
 */

const getImgPath = (img) => {
    return `http://[::1]:5173/public/assets/${img}`;
};

export { getImgPath };