package dombosco.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import dombosco.dominio.Post;

@Repository
public interface PostRepository extends CrudRepository<Post, Long>{

}
