const users = [
  {
    id: 0,
    username: '',
    firstname: '',
    lastname: '',
    email: '',
    mobile: '',
    level: 'Noob',
    mistpoints: '1',
    address: {
      address1: '',
      address2: '',
      city: '',
      postcode: '',
      country: ''
    }
  },
    {
      id: 1,
      username: 'Amogus',
      firstname: 'Bob',
      lastname: 'Jenkins',
      email: 'amogus@gmail.com',
      mobile: '+440000000000',
      level: 'Boss',
      mistpoints: '9999',
      address: {
        address1: 'Letsby Avenue',
        address2: '999',
        city: 'Newport',
        postcode: 'NP20 2DZ',
        country: 'Wales'
      }
    },
    {
      id: 2,
      username: 'BoneCrusher87',
      firstname: 'Joanna',
      lastname: 'Soap',
      email: 'bonecrusher_87@yahoo.co.uk',
      mobile: '+440000000000',
      level: 'Tank',
      mistpoints: '247',
      address: {
        address1: 'Pigs Street',
        address2: 'Noose Way',
        city: 'Pontypridd',
        postcode: 'CF37 3X9',
        country: 'Wales'
      }
    },
    {
      id: 3,
      username: 'HotStuff',
      firstname: 'Gertrude',
      lastname: 'Wilkinson',
      email: 'gertrude-wilkinson59@hotmail.co.uk',
      mobile: '+440000000000',
      level: 'Assassin',
      mistpoints: '89',
      address: {
        address1: 'Horse Street',
        address2: 'Second Right',
        city: 'Merthyr Tydfil',
        postcode: 'CF47 XXX',
        country: 'Wales'
      }
    },
    {
      id: 4,
      username: 'MrBread2000',
      firstname: 'John',
      lastname: 'Something',
      email: 'bread2000@icloud.co.uk',
      mobile: '+440000000000',
      level: 'Destroyer',
      mistpoints: '22',
      address: {
        address1: 'Bread Street',
        address2: 'Third Right',
        city: 'Merthyr Tydfil',
        postcode: 'CF47 XXX',
        country: 'Wales'
      }
    },
    {
      id: 5,
      username: 'birdkiller',
      firstname: 'Timothy',
      lastname: 'Byrd',
      email: 'iamabirdkiller@gmail.com',
      mobile: '+440000000000',
      level: 'Gangster',
      mistpoints: '14',
      address: {
        address1: 'Bird Street',
        address2: 'Bird Flu Area',
        city: 'Birgmingham',
        postcode: 'B19 191',
        country: 'England'
      }
    },
    {
      id: 6,
      username: 'katnip78',
      firstname: 'Sarah',
      lastname: 'Beeswax',
      email: 'katnip78@gmail.com',
      mobile: '+440000000000',
      level: 'Noob',
      mistpoints: '10',
      address: {
        address1: 'Queen Street',
        address2: '',
        city: 'London',
        postcode: 'E1 6AN',
        country: 'England'
      }
    },
  ]
  
  function getNestedValue(obj, keys) {
    let key = keys.shift()
    if (keys.length) {
      return getNestedValue(obj[key], keys)
    }
    return obj[key]
  }
  
  function viewData(){
    var uid=document.getElementById("viewUserId").value;
    var inputs = document.getElementsByClassName('viewInfo');
    const user = users.find(u => { return u.id === parseInt(uid) })
    if (user) {
      Object.keys(inputs).forEach(i => {
        let inputName = inputs[i].getAttribute('name');
        inputs[i].value = getNestedValue(user, inputName.split('.'))
      })
    }
    //document.getElementById("testimage").src= 'assets/img/st,small,507x507-pad,600x600,f8f8f8.png';
  }
  viewData()