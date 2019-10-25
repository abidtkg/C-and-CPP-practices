// Declear all mobile array
let brands = {
  brand: "samsung",
  mobile: [
    {
      model: "J7 Next",
      camera: {
        font: 2,
        back: 20,
        flash: true
      },
      ram: {
        storage: 2,
        technology: "DDR4"
      }
    },
    {
      model: "A 50",
      camera: {
        font: 12,
        back: 30,
        flash: false
      },
      ram: {
        storage: "4 GB",
        technology: "DDR - 4"
      }
    }
  ]
};

for (mobiles of brands.mobile) {
  if (mobiles.camera.font > 5) {
    console.log("model " + mobiles.model);
  }
  // console.log(mobiles.camera.back);
}
