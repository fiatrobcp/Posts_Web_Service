package dombosco.dominio;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.hibernate.annotations.UpdateTimestamp;

@Entity
public class Post implements Serializable {

	private static final long serialVersionUID = 1L;
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;
	private String descricao;
	private double quantidade;
	private String fornecedor;	
	private String precoVenda;
	private String unidade;
	private String precoCompra;
	private String codBarras;
	private String codReferencia;
	
	@Column(nullable = true, updatable = true)
    @Temporal(TemporalType.TIMESTAMP)
    @UpdateTimestamp
    private Date createdAt;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public double getQuantidade() {
		return quantidade;
	}

	public void setQuantidade(double quantidade) {
		this.quantidade = quantidade;
	}

	public String getFornecedor() {
		return fornecedor;
	}

	public void setFornecedor(String fornecedor) {
		this.fornecedor = fornecedor;
	}

	public String getPrecoVenda() {
		return precoVenda;
	}

	public void setPrecoVenda(String precoVenda) {
		this.precoVenda = precoVenda;
	}

	public String getUnidade() {
		return unidade;
	}

	public void setUnidade(String unidade) {
		this.unidade = unidade;
	}

	public String getPrecoCompra() {
		return precoCompra;
	}

	public void setPrecoCompra(String precoCompra) {
		this.precoCompra = precoCompra;
	}

	public String getCodBarras() {
		return codBarras;
	}

	public void setCodBarras(String codBarras) {
		this.codBarras = codBarras;
	}

	public String getCodReferencia() {
		return codReferencia;
	}

	public void setCodReferencia(String codReferencia) {
		this.codReferencia = codReferencia;
	}

	public Date getCreatedAt() {
		return createdAt;
	}

	public void setCreatedAt(Date createdAt) {
		this.createdAt = createdAt;
	}

	public static long getSerialversionuid() {
		return serialVersionUID;
	}



	
	


	
	

}
