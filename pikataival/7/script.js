function newArray(array) {
    characterArray = [];
    array.map(value => {
        characterArray.push(value.length)
    })
    return characterArray;
}

// newArray(["Taitaja", "Pori"])