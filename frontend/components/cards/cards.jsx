import PropTypes from "prop-types";

import { Card } from "react-bootstrap";
import { Link } from "react-router-dom";

import "./cards.scss";

function Cards(props) {
	return (
		<>
			<Card
				as={Link}
				className="text-decoration-none mb-4 cardStyle"
				style={{ width: "15rem" }}
			>
				<div className="d-flex justify-content-center mt-3 mx-3">
					<Card.Img
						variant="top"
						src="/src/assets/img/dev-freak_logo.png"
						alt={"Image du Pokemon " + props.name}
					/>
				</div>
				<Card.Body>
					<Card.Title>Nom : {props.name}</Card.Title>
					<Card.Subtitle className="mb-2 text-muted">
						Id: {props.id}
					</Card.Subtitle>
					<Card.Text>Cri : {props.summary}</Card.Text>
					<Card.Text>Taille : {props.height}</Card.Text>
					<Card.Text>Poids : {props.weight}</Card.Text>
					<Card.Text>Type(s) : {props.types}</Card.Text>
				</Card.Body>
			</Card>
		</>
	);
}

Cards.propTypes = {
	pokemon: PropTypes.shape({
		id_pokemon: PropTypes.number.isRequired,
		name: PropTypes.string,
		height: PropTypes.float,
		weight: PropTypes.float,
		summary: PropTypes.string,
		img_src: PropTypes.string,
	}),
};

export default Cards;
