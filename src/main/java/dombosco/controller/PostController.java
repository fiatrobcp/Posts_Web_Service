package dombosco.controller;

import java.util.Collection;
import java.util.Optional;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import dombosco.dominio.Post;
import dombosco.repository.PostRepository;

@RestController
public class PostController {
	
	
	@Autowired 
	PostRepository postRep;

	@GetMapping("/posts")
	public Collection<Post> listaPosts() {
		return (Collection<Post>) postRep.findAll();
	}
	
	
	 @PostMapping("/cadastro")
	    public String createLote(@Valid @RequestBody Post post, BindingResult result) {
		 	//post.setQuantidade(Double.parseDouble(result.getFieldValue("quantidade").toString()));
	        postRep.save(post);
	        
	        return "Cadastrado!";
	    }
	 
//	 @PostMapping("/deleted")
//	    public String deletedLote(@Valid @RequestBody Post post, BindingResult result) {
//		 	//post.setQuantidade(Double.parseDouble(result.getFieldValue("quantidade").toString()));
//	        postRep.delete(post);
//	        return "Deleted!";
//	    }
	 
	 @RequestMapping(path="/deleted/{id}")
	 public String deleted2Lote(@PathVariable ("id") Long id ) {
		 	Post post = new Post();
		 	post.setId(id);
		 	
		 	//post.setQuantidade(Double.parseDouble(result.getFieldValue("quantidade").toString()));
	        postRep.delete(post);
	        return "Deleted!";
	    }
	 
	 @RequestMapping(path="/consultar/{id}")
	 public Optional<Post> consultar(@PathVariable ("id") Long id ) {
		 	Post post = new Post();
		 	//post = postRep.findById(id);
		 	
		 	//post.setQuantidade(Double.parseDouble(result.getFieldValue("quantidade").toString()));
	        
	        return postRep.findById(id);
	    }
//	 @GetMapping("/deleted2/{id}")
//	    public String deleted2Lote(@PathVariable ("id") Long id ) {
//		 	Post post = new Post();
//		 	post.setId(id);
//		 	
//		 	//post.setQuantidade(Double.parseDouble(result.getFieldValue("quantidade").toString()));
//	        postRep.delete(post);
//	        return "Deleted!";
//	    }
	 
	 
	
}
