import Button from "react-bootstrap/Button";
import Container from "react-bootstrap/Container";
import Form from "react-bootstrap/Form";
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import { Image, NavDropdown } from "react-bootstrap";

import "./navbar.scss";
import { Link } from "react-router-dom";

function NavbarTop() {
	return (
		<>
			<Navbar expand="lg" bg="dark" variant="dark" data-bs-theme="dark">
				<Container>
					<Navbar.Brand className="d-flex align-items-center" as={Link} to="/">
						<Image
							alt="Logo"
							src="/src/assets/img/dev-freak_logo.png"
							width="40"
							className="d-inline-block align-top"
						/>{" "}
						<span className="ms-2 special-elite-regular fs-3">DevFreak</span>
					</Navbar.Brand>
					<Navbar.Toggle aria-controls="basic-navbar-nav" />
					<Navbar.Collapse id="basic-navbar-nav">
						<Nav className="me-auto">
							<Nav.Link as={Link} to="/">
								Accueil
							</Nav.Link>
							<Nav.Link as={Link} to="/salulol">
								Salulol
							</Nav.Link>

							<NavDropdown title="Types" id="basic-nav-dropdown">
								<NavDropdown.Item href="#action/1.1">Combat</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.2">Dragon</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.3">Eau</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.4">Electrik</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.5">Feu</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.6">Glace</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.7">Insecte</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.8">Normal</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.9">Plante</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.10">Poison</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.11">Psy</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.12">Roche</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.13">Sol</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.14">Spectre</NavDropdown.Item>
								<NavDropdown.Item href="#action/1.15">Vol</NavDropdown.Item>
							</NavDropdown>
						</Nav>
						<Form className="d-flex formSearch" role="search" id="searchForm">
							<input
								className="form-control me-2"
								type="search"
								placeholder="Rechercher un pokémon"
								aria-label="Search"
							/>
							<Button className="btn btn-outline-light bg-dark" type="submit">
								Rechercher
							</Button>
						</Form>
					</Navbar.Collapse>
				</Container>
			</Navbar>
		</>
	);
}

export default NavbarTop;
