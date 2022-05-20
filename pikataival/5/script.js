function newArray(array) {
    const x = new Set(array);
    const filteredArray = Array.from(x);
    return filteredArray
}

// console.log(newArray([0, 1,2,3,4,5,5,5,5,7]))