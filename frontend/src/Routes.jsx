import { Route, Routes } from "react-router-dom";
import Homepage from "../pages/Homepage";

const Routing = () => {
  return (
    <>
    <Routes>
        <Route path="/" element={<Homepage />}/>
        {/* <Route path="/" element={<xxx />} />
        <Route path="/" element={<xxx />} />
        <Route path="/" element={<xxx />} />
        <Route path="/" element={<xxx />} /> */}
    </Routes>
    </>
    );
};

export default Routing;