
import {defineStore} from 'pinia'

export const useAuthentification = defineStore('postIt', {
   state: ()=>({
      User: [],

   }),

   actions:{
     async displayPostIt(){
        try{
          const response = await fetch('https://post-it.epi-bluelock.bj/notes')
          const data = await response.json()
          this.loading = false
          this.allPost = data.notes
        }catch(error){
          this.loading = false
          alert('Error : ' + error.message)
        }
      },


      async register(name, email, password, confirm_password) {

       try {
        const response = await fetch('http://127.0.0.1:8001/api/register', {
          method: "POST",
          headers: {
            'Content-Type': 'application/json'
          },

          body: JSON.stringify({name: name, email: email, password: password, confirm_password: confirm_password})
        })

        const data = await response.json();
        alert(data.message);
        // if (response.ok) {
        //   this.User = await data
        //   alert("register successfull !");
        // } else {
        //   alert("Error register.");
        // }

      } catch (error) {
        alert('Une erreur est survenue : ' + error.message)

      }
    },


    async login(email, password) {

       try {
        const response = await fetch('http://127.0.0.1:8001/api/login', {
          method: "POST",
          headers: {
            'Content-Type': 'application/json'
          },

          body: JSON.stringify({email: email, password: password})
        })

        const data = await response.json();

        alert(data.message);
         
        // if (response.ok) {
        //   this.User = await data
        //   alert("login successfull !");
        // } else {
        //   alert("Error register.");
        // }

      } catch (error) {
        alert('Une erreur est survenue : ' + error.message)

      }
    },

    //   async deletePost(id){
    //     try{
    //        const deleteP = await fetch("https://post-it.epi-bluelock.bj/notes/"+id, { method: 'DELETE' })
    //           this.allPost = this.allPost.filter(p => p.id !== id)
    //        if(deleteP.ok){
    //         alert('this post delele successfully !')
    //        }
    //     }catch(error){
    //       alert('Error : '+error.message)
    //     }

      },

      async allprovider() {
        const response = await fetch("http://127.0.0.1:8001/api/provider")

        const data = await response.json()
        alert(await data)
        this.User = await data
        return data
      }

    //   async UpdatePost(id, title, content){
    //     try{
    //       const response = await fetch("https://post-it.epi-bluelock.bj/notes/"+id, {
    //       method: 'PUT',
    //       headers: {
    //          'Content-Type': 'application/json'
    //       },
    //       body: JSON.stringify({title, content})
    //     })

    //     if(response.ok){
    //       alert("Update succefully !!")
    //     }
    //     }catch(error){
    //       alert("ERROR : "+error.message)
    //     }
    //   },

//      async getPostByID(id) {
//       try {
//         const response = await fetch("https://post-it.epi-bluelock.bj/notes/"+id, {
//           method: 'GET'
//         })
//         const data = await response.json()
//         return data
//       } catch (error) {
//         console.error("Erreur lors de la récupération du post :", error)
//         return null
//       }
// }

})
